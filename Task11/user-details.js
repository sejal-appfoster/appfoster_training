document.addEventListener('DOMContentLoaded', function () {
  const urlParams = new URLSearchParams(window.location.search);
  const userId = urlParams.get('id');
  if (userId) {
    fetchUserDetails(userId);
  }
});

async function fetchUserDetails(userId) {
  try {
    const response = await fetch(`https://gorest.co.in/public/v2/users/${userId}`);
    if (!response.ok) throw new Error('Failed to fetch user details');

    const user = await response.json();
    const userDetails = document.getElementById('user-details');
    userDetails.innerHTML = `
        <p><strong>Id:</strong> ${user.id}</p>
        <p><strong>Name:</strong> ${user.name || 'N/A'}</p>
        <p><strong>Email:</strong> ${user.email || 'N/A'}</p>
        <p><strong>Gender:</strong> ${user.gender || 'N/A'}</p>
        <p><strong>Status:</strong> ${user.status || 'N/A'}</p>
      `;
  } catch (error) {
    console.error('Error fetching user details:', error);
  }
}
