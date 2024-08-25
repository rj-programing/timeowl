fetch("./navbar.html")
  .then(response => response.text())
  .then(data => {
    document.getElementById("navbar").innerHTML = data;
  });

document.querySelectorAll('.view-more-btn').forEach(button => {
  button.addEventListener('click', function() {
    const card = this.closest('.card');
    const details = card.querySelector('.faculty-details');
    
    if (details.style.display === 'none' || details.style.display === '') {
      details.style.display = 'block';
      details.scrollIntoView({ behavior: 'smooth' });
    } else {
      details.style.display = 'none';
    }
  });
});

document.getElementById('add-faculty-btn').addEventListener('click', () => {
  document.querySelector('.add-btn').style.display = 'none';
  document.querySelector('.over-form').style.display = 'block';
  document.querySelector('.container').style.display = 'none';
});

document.querySelector('.add-form-btn button').addEventListener('click', function(event) {
  event.preventDefault(); 
  document.querySelector('.over-form').style.display = 'none';
  document.querySelector('.container').style.display = 'flex';
});

document.querySelector('.add-form-btn').addEventListener('click', () => {
  document.querySelector('.add-btn').style.display = 'block';
})