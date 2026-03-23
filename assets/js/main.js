// ============================================================
// main.js — Kampung Ketupat Warna Warni Samarinda
// Custom JS + Vue 3 Komponen Interaktif
// ============================================================

// ===== NAVBAR SCROLL EFFECT =====
window.addEventListener('scroll', () => {
  const navbar = document.getElementById('mainNavbar');
  if (navbar) {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
  }
});

// ===== SCROLL REVEAL ANIMATION =====
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));

// ===== ACTIVE NAV ON SCROLL =====
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.navbar-kk .nav-link');

if (sections.length && navLinks.length) {
  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY + 120;
    sections.forEach((section) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute('id');
      if (scrollY >= top && scrollY < top + height) {
        navLinks.forEach((link) => {
          link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
        });
      }
    });
  });
}

// ===== VUE: GALERI FILTER (di halaman galeri.php) =====
if (document.getElementById('app-galeri')) {
  const { createApp } = Vue;
  createApp({
    data() {
      return {
        kategoriAktif: 'semua',
        galeri: window.__GALERI_DATA__ || [],
      };
    },
    computed: {
      galeriFiter() {
        if (this.kategoriAktif === 'semua') return this.galeri;
        return this.galeri.filter(item => item.kategori === this.kategoriAktif);
      },
    },
    methods: {
      setKategori(kat) { this.kategoriAktif = kat; },
      imgUrl(foto) {
        return foto.startsWith('http') ? foto : `/kampung-ketupat-projek-akhir/assets/uploads/galeri/${foto}`;
      },
    },
    template: `
      <div>
        <!-- Filter Tabs -->
        <div class="d-flex flex-wrap gap-2 mb-4">
          <button v-for="kat in ['semua','wisata','kuliner','budaya','fasilitas','umum']"
            :key="kat"
            @click="setKategori(kat)"
            :class="['btn btn-sm', kategoriAktif === kat ? 'btn-kk' : 'btn-outline-secondary']"
            style="border-radius:999px; text-transform:capitalize;">
            {{ kat }}
          </button>
        </div>
        <!-- Grid -->
        <div class="row g-3">
          <div v-for="item in galeriFiter" :key="item.id" class="col-sm-6 col-lg-4">
            <div class="gallery-item">
              <img :src="imgUrl(item.foto)" :alt="item.judul" />
              <div class="gallery-overlay">
                <span class="gallery-caption">{{ item.judul }}</span>
              </div>
            </div>
          </div>
          <div v-if="galeriFiter.length === 0" class="col-12 text-center py-5 text-muted">
            <i class="bi bi-image fs-1 d-block mb-2"></i>
            Belum ada foto di kategori ini.
          </div>
        </div>
      </div>
    `,
  }).mount('#app-galeri');
}

// ===== VUE: KRITIK SARAN FORM VALIDATION =====
if (document.getElementById('app-kritik-saran')) {
  const { createApp } = Vue;
  createApp({
    data() {
      return {
        nama: '',
        email: '',
        jenis: 'saran',
        pesan: '',
        loading: false,
        pesanHitungan: 0,
        errors: {},
      };
    },
    watch: {
      pesan(val) { this.pesanHitungan = val.length; },
    },
    methods: {
      validate() {
        this.errors = {};
        if (!this.nama.trim()) this.errors.nama = 'Nama wajib diisi.';
        if (this.email && !/\S+@\S+\.\S+/.test(this.email)) this.errors.email = 'Format email tidak valid.';
        if (!this.pesan.trim()) this.errors.pesan = 'Pesan wajib diisi.';
        else if (this.pesan.trim().length < 10) this.errors.pesan = 'Pesan minimal 10 karakter.';
        return Object.keys(this.errors).length === 0;
      },
      submit() {
        if (!this.validate()) return;
        document.getElementById('form-kritik-saran').submit();
      },
    },
    template: `
      <div class="form-kk">
        <div class="mb-3">
          <label class="form-label fw-600">Nama Lengkap <span class="text-danger">*</span></label>
          <input v-model="nama" name="nama" type="text" class="form-control"
            :class="errors.nama ? 'is-invalid' : ''" placeholder="Masukkan nama Anda..." />
          <div v-if="errors.nama" class="invalid-feedback">{{ errors.nama }}</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-600">Email <span class="text-muted">(opsional)</span></label>
          <input v-model="email" name="email" type="email" class="form-control"
            :class="errors.email ? 'is-invalid' : ''" placeholder="email@contoh.com" />
          <div v-if="errors.email" class="invalid-feedback">{{ errors.email }}</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-600">Jenis Pesan <span class="text-danger">*</span></label>
          <select v-model="jenis" name="jenis" class="form-select">
            <option value="kritik">Kritik</option>
            <option value="saran">Saran</option>
            <option value="pertanyaan">Pertanyaan</option>
            <option value="apresiasi">Apresiasi</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="form-label fw-600">Pesan <span class="text-danger">*</span></label>
          <textarea v-model="pesan" name="pesan" class="form-control" rows="5"
            :class="errors.pesan ? 'is-invalid' : ''"
            placeholder="Tulis kritik, saran, atau pertanyaan Anda..."></textarea>
          <div class="d-flex justify-content-between mt-1">
            <div v-if="errors.pesan" class="text-danger small">{{ errors.pesan }}</div>
            <small class="text-muted ms-auto">{{ pesanHitungan }} karakter</small>
          </div>
        </div>
        <button @click="submit" type="button" class="btn btn-kk w-100">
          <i class="bi bi-send me-2"></i>Kirim Pesan
        </button>
      </div>
    `,
  }).mount('#app-kritik-saran');
}

// ===== VUE: EVENT FILTER (di halaman event.php) =====
if (document.getElementById('app-event')) {
  const { createApp } = Vue;
  createApp({
    data() {
      return {
        filterStatus: 'semua',
        events: window.__EVENT_DATA__ || [],
      };
    },
    computed: {
      eventFiltered() {
        if (this.filterStatus === 'semua') return this.events;
        return this.events.filter(e => e.status === this.filterStatus);
      },
    },
    methods: {
      setFilter(s) { this.filterStatus = s; },
      formatTanggal(tgl) {
        return new Date(tgl).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' });
      },
      badgeClass(status) {
        return { 'akan_datang': 'badge-status-akan', 'berlangsung': 'badge-status-berlangsung', 'selesai': 'badge-status-selesai' }[status] || '';
      },
      badgeLabel(status) {
        return { 'akan_datang': 'Akan Datang', 'berlangsung': 'Sedang Berlangsung', 'selesai': 'Selesai' }[status] || status;
      },
    },
    template: `
      <div>
        <div class="d-flex flex-wrap gap-2 mb-4">
          <button v-for="s in ['semua','akan_datang','berlangsung','selesai']"
            :key="s" @click="setFilter(s)"
            :class="['btn btn-sm', filterStatus === s ? 'btn-kk' : 'btn-outline-secondary']"
            style="border-radius:999px; text-transform:capitalize;">
            {{ s === 'semua' ? 'Semua' : s === 'akan_datang' ? 'Akan Datang' : s === 'berlangsung' ? 'Berlangsung' : 'Selesai' }}
          </button>
        </div>
        <div class="row g-4">
          <div v-for="event in eventFiltered" :key="event.id" class="col-md-6 col-lg-4">
            <div class="card-kk h-100">
              <div class="card-body d-flex gap-3">
                <div class="event-date-box flex-shrink-0">
                  <div class="day">{{ new Date(event.tanggal_mulai).getDate() }}</div>
                  <div class="month">{{ new Date(event.tanggal_mulai).toLocaleDateString('id-ID',{month:'short'}) }}</div>
                </div>
                <div>
                  <span :class="['badge mb-1', badgeClass(event.status)]">{{ badgeLabel(event.status) }}</span>
                  <h6 class="fw-bold mb-1">{{ event.nama_event }}</h6>
                  <p class="text-muted small mb-1">{{ event.deskripsi ? event.deskripsi.substring(0,80) + '...' : '' }}</p>
                  <small class="text-muted"><i class="bi bi-geo-alt me-1"></i>{{ event.lokasi }}</small>
                </div>
              </div>
            </div>
          </div>
          <div v-if="eventFiltered.length === 0" class="col-12 text-center py-5 text-muted">
            <i class="bi bi-calendar-x fs-1 d-block mb-2"></i>
            Tidak ada event di kategori ini.
          </div>
        </div>
      </div>
    `,
  }).mount('#app-event');
}

// ===== UMKM: SEARCH FILTER (Vue) =====
if (document.getElementById('app-umkm')) {
  const { createApp } = Vue;
  createApp({
    data() {
      return {
        cari: '',
        kategori: 'semua',
        umkm: window.__UMKM_DATA__ || [],
      };
    },
    computed: {
      umkmFiltered() {
        return this.umkm.filter(u => {
          const cocokKat = this.kategori === 'semua' || u.kategori === this.kategori;
          const cocokCari = !this.cari || u.nama_umkm.toLowerCase().includes(this.cari.toLowerCase());
          return cocokKat && cocokCari;
        });
      },
    },
    methods: {
      imgUrl(foto) {
        return foto ? `/kampung-ketupat-projek-akhir/assets/uploads/umkm/${foto}` : '/kampung-ketupat-projek-akhir/assets/img/umkm-default.jpg';
      },
    },
    template: `
      <div>
        <div class="row g-3 mb-4 align-items-center">
          <div class="col-md-6">
            <input v-model="cari" type="text" class="form-control" placeholder="🔍 Cari nama UMKM..." />
          </div>
          <div class="col-md-6">
            <select v-model="kategori" class="form-select">
              <option value="semua">Semua Kategori</option>
              <option value="kuliner">Kuliner</option>
              <option value="kerajinan">Kerajinan</option>
              <option value="souvenir">Souvenir</option>
              <option value="jasa">Jasa</option>
            </select>
          </div>
        </div>
        <div class="row g-4">
          <div v-for="u in umkmFiltered" :key="u.id" class="col-sm-6 col-lg-3">
            <div class="card-kk umkm-card h-100">
              <img :src="imgUrl(u.foto)" :alt="u.nama_umkm" />
              <div class="card-body">
                <span class="umkm-badge">{{ u.kategori }}</span>
                <h6 class="fw-bold mb-1">{{ u.nama_umkm }}</h6>
                <p class="text-muted small mb-2">{{ u.pemilik }}</p>
                <p class="small text-muted mb-2">{{ u.produk_unggulan }}</p>
                <a v-if="u.kontak" :href="'tel:' + u.kontak" class="btn btn-kk-outline btn-sm w-100">
                  <i class="bi bi-telephone me-1"></i>Hubungi
                </a>
              </div>
            </div>
          </div>
          <div v-if="umkmFiltered.length === 0" class="col-12 text-center py-5 text-muted">
            <i class="bi bi-shop fs-1 d-block mb-2"></i>
            UMKM tidak ditemukan.
          </div>
        </div>
      </div>
    `,
  }).mount('#app-umkm');
}
