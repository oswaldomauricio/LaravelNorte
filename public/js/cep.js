
document.addEventListener('DOMContentLoaded', function () {
  var myModal = new bootstrap.Modal(document.getElementById('contactModal_trocarPeloId'));

  var savedCep = localStorage.getItem('cep');
  if (!savedCep) {
    myModal.show();
  }

  document.getElementById('okButton').addEventListener('click', function (event) {
    event.preventDefault();

    var cepValue = document.getElementById('cepInput').value.trim();
    if (cepValue === "") {
      document.getElementById('error-message').classList.remove('hidden');
    } else {
      document.getElementById('error-message').classList.add('hidden');
      document.getElementById('loadingSpinner').classList.remove('hidden');
      setTimeout(function () {
        localStorage.setItem('cep', cepValue);
        axios.get('http://127.0.0.1:8000/api/cep', {
          params: {
            cepInput: cepValue
          }
        })
          .then(function (response) {

            localStorage.setItem('zipCode', response.data.zipCode);
            localStorage.setItem('address_type', response.data
              .address_type);
            localStorage.setItem('address_name', response.data
              .address_name);
            localStorage.setItem('address', response.data.address);
            localStorage.setItem('state', response.data.state);
            localStorage.setItem('district', response.data.district);
            localStorage.setItem('lat', response.data.lat);
            localStorage.setItem('lng', response.data.lng);
            localStorage.setItem('city', response.data.city);
          })
          .catch(function (error) {
            console.error('Erro ao consultar a API de CEP:', error);
          });
        document.getElementById('loadingSpinner').classList.add('hidden');
        myModal.hide();
      }, 2000);
    }
  });
});

