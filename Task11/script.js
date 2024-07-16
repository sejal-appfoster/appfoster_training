document.addEventListener('DOMContentLoaded', function () {
  let currentPage = 1;
  const usersPerPage = 10;
  fetchUsers(currentPage, usersPerPage);

  document.getElementById('pagination-controls').addEventListener('click', function (event) {
    if (event.target.classList.contains('page-link')) {
      const page = parseInt(event.target.getAttribute('data-page'));
      if (!isNaN(page)) {
        currentPage = page;
        fetchUsers(currentPage, usersPerPage);
      }
    }
  });
});

async function fetchUsers(page, limit) {
  try {
    const response = await fetch(`https://gorest.co.in/public/v2/users?page=${page}&per_page=${limit}`);
    const users = await response.json();
    const userList = document.getElementById('user-list');
    userList.innerHTML = '';

    users.forEach(user => {
      const userItem = document.createElement('div');
      userItem.className = 'list-group-item d-flex justify-content-between align-items-center';
      userItem.innerHTML = `
        <span>${user.name}</span>
        <a class="btn btn-light" href="user-details.html?id=${user.id}"><i class="fas fa-eye"></i></a>
      `;
      userList.appendChild(userItem);
    });

    updatePaginationControls(page);
  } catch (error) {
    console.error('Error fetching users:', error);
  }
}

function updatePaginationControls(currentPage) {
  const paginationControls = document.getElementById('pagination-controls');
  paginationControls.innerHTML = '';

  const prevPage = currentPage - 1;
  const nextPage = currentPage + 1;

  paginationControls.innerHTML = `
    <a href="#" class="w3-button page-link" data-page="${prevPage}" ${prevPage < 1 ? 'disabled' : ''}>&laquo;</a>
    <a href="#" class="w3-button page-link w3-green" data-page="${currentPage}">${currentPage}</a>
    <a href="#" class="w3-button page-link" data-page="${nextPage}">&raquo;</a>
  `;
}
