loadDashboardStats(); // initial load
setInterval(loadDashboardStats, 5000); // refresh every 5s

async function loadDashboardStats() {
  try {
    const res = await fetch("../../classes/dashboardStats.php", {
      method: "POST",
    });

    if (!res.ok) throw new Error("Network Response was not ok.");

    const data = await res.json();

    document.getElementById("totalStudents").textContent = data.totalStudents;
    document.getElementById("pendingRegistrations").textContent =
      data.totalPendingRegistrations;
    document.getElementById("newsLetterSubscribers").textContent =
      data.totalNewsSubscribers;
  } catch (error) {
    document.getElementById("totalStudents").textContent = 0;
    document.getElementById("pendingRegistrations").textContent = 0;
  }
}
