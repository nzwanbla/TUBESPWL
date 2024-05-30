document.addEventListener('DOMContentLoaded', (event) => {
    
    const user_id = localStorage.getItem('user-id');
    const penulis_filter = user_id;  
    const status_filter = "reject";  

    const rows = document.querySelectorAll('tbody[penulis][status]');

    if (user_id == 1) {
        return;
    } 

    rows.forEach(row => {
        const author = row.getAttribute('penulis');
        const status = row.getAttribute('status');
        // alert(status)
        // || 
        if (author !== penulis_filter || status !== status_filter) {
            row.style.display = 'none';
        }
    });
});
