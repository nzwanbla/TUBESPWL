const user_name = localStorage.getItem('user-name');
const user_id = localStorage.getItem('user-id');

if (user_name) {
    document.getElementById('user_name').value = user_name;
    document.getElementById('user_id').value = user_id;
}

document.getElementById('create-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    const judul_berita = document.getElementById('judul_berita').value;
    const jenis_berita = document.getElementById('jenis_berita').value;
    const judul1 = document.getElementById('judul1').value;
    const isi1 = document.getElementById('isi1').value;
    const judul2 = document.getElementById('judul2').value;
    const isi2 = document.getElementById('isi2').value;
    const judul3 = document.getElementById('judul3').value;
    const isi3 = document.getElementById('isi3').value;
    const author_id = document.getElementById('user_id').value;
    const status = "";

    axios.post('/create', {
        judul_berita: judul_berita,
        jenis_berita: jenis_berita,
        judul1: judul1,
        isi1: isi1,
        judul2: judul2,
        isi2: isi2,
        judul3: judul3,
        isi3: isi3,
        user_id: author_id,
        status:status
    })
    .then(response => {
        alert(response.data.message);
        window.location.href = '/dashboard';
    })
    .catch(error => {
        console.error('Tolong isi', error);
        if (error = 422) {
            alert('tolong isi : judul, jenis, judul paragraf 1 dan isi paragraf 1')
        }
    });
});

  // Ensure the token is included in all subsequent requests
  const token = localStorage.getItem('app-token');
  if (token) {
      axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
  }