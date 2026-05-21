const form = document.getElementById("form");

form.addEventListener("submit", async function(e) {

  e.preventDefault();

  const data = {

    name: document.getElementById("name").value,

    email: document.getElementById("email").value,

    phone: document.getElementById("phone").value,

    message: document.getElementById("message").value
  };

  const response = await fetch("insert.php", {

    method: "POST",

    headers: {
      "Content-Type": "application/json"
    },

    body: JSON.stringify(data)
  });

  const result = await response.json();

  document.getElementById("result").innerText = result.message;

  form.reset();

});