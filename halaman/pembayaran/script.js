document.getElementById("fakultas").addEventListener("change", function () {
  var fakultas = this.value;
  var prodi = document.getElementById("prodi").value;
  calculateFees(fakultas, prodi);
});

document.getElementById("prodi").addEventListener("change", function () {
  var prodi = this.value;
  var fakultas = document.getElementById("fakultas").value;
  calculateFees(fakultas, prodi);
});

function calculateFees(fakultas, prodi) {
  var spp = 0;
  var biayaPerSKS = 0;

  // Hitung biaya berdasarkan fakultas dan prodi
  if (fakultas === "teknik") {
    spp = 500000;
    if (prodi === "informatika" || prodi === "informasi") {
      biayaPerSKS = 100000;
    } else {
      biayaPerSKS = 90000;
    }
  } else if (fakultas === "hukum") {
    spp = 600000;
    if (prodi === "pidana" || prodi === "pidata") {
      biayaPerSKS = 110000;
    } else {
      biayaPerSKS = 95000;
    }
  } else if (fakultas === "sastra") {
    spp = 550000;
    biayaPerSKS = 85000;
  } else if (fakultas === "ilmu_sosial") {
    spp = 580000;
    if (prodi === "politik") {
      biayaPerSKS = 105000;
    } else {
      biayaPerSKS = 92000;
    }
  }

  // Hitung total biaya
  var totalBiaya = spp + biayaPerSKS * 24; // 24 adalah jumlah SKS

  // Update nilai pada input
  document.getElementById("spp").value = spp;
  document.getElementById("biaya_sks").value = biayaPerSKS;
  document.getElementById("total_biaya").value = totalBiaya;
}
