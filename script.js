const liKaryawan = document.getElementById('li_karyawan');
const lidashboard = document.getElementById('li_dashboard');
const lisupplier = document.getElementById('li_supplier');

function updateNavClass(activeTabId) {

    lidashboard.classList.toggle('active', activeTabId === 'dashboard');
    liKaryawan.classList.toggle('active', activeTabId === 'karyawan');
    lisupplier.classList.toggle('active', activeTabId === 'supplier');
}
function updateKaryawanClass() {
    const currentPath = window.location.pathname;

    if (currentPath.includes('karyawan.php')) {
        updateNavClass('karyawan');
    } else if (currentPath.includes('index.php')) {
        updateNavClass('dashboard');
    } else if (currentPath.includes('supplier.php')) {
        updateNavClass('supplier');
    }
}

document.addEventListener('DOMContentLoaded', updateKaryawanClass);

window.addEventListener('popstate', function (event) {
    if (event.state) {
        updateKaryawanClass();
    }
});



