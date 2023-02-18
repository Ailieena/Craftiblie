const projectFields = document.querySelector('.project-fields');
const patternFields = document.querySelector('.pattern-fields');
const uploadType = document.querySelectorAll('input[name="upload-type"]');

uploadType.forEach((radio) => {
  radio.addEventListener('change', (event) => {
    if (event.target.value === 'project') {
      projectFields.style.display = 'block';
      patternFields.style.display = 'none';
    } else if (event.target.value === 'pattern') {
      patternFields.style.display = 'block';
      projectFields.style.display = 'none';
    }
  });
});