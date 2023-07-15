
// Edit button functionality
document.addEventListener("DOMContentLoaded", function() {
  const editUsernameButton = document.getElementById('editUsernameButton');
  const editUsernameFormContainer = document.getElementById('editUsernameFormContainer');

  editUsernameButton.addEventListener('click', function(event) {
    event.preventDefault();
    editUsernameFormContainer.style.display = 'block';
  });
  
  const editAgeButton = document.getElementById('editAgeButton');
  const editAgeFormContainer = document.getElementById('editAgeFormContainer');

  editAgeButton.addEventListener('click', function(event) {
    event.preventDefault();
    editAgeFormContainer.style.display = 'block';
  });
  
  const editEmailButton = document.getElementById('editEmailButton');
  const editEmailFormContainer = document.getElementById('editEmailFormContainer');

  editEmailButton.addEventListener('click', function(event) {
    event.preventDefault();
    editEmailFormContainer.style.display = 'block';
  });
  
  const editPasswordButton = document.getElementById('editPasswordButton');
  const editPasswordFormContainer = document.getElementById('editPasswordFormContainer');

  editPasswordButton.addEventListener('click', function(event) {
    event.preventDefault();
    editPasswordFormContainer.style.display = 'block';
  });
});

// Code for myModal
const myModal = new bootstrap.Modal('#welcome-modal');

window.addEventListener('DOMContentLoaded', () => {
  myModal.show();
});

