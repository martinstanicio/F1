const config = {
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "65a56aaacamshf0b033fad45a2adp1f550ajsnd81796846c58",
    "X-RapidAPI-Host": "formula-1-standings.p.rapidapi.com",
  },
};

async function pilotos() {
  let results;

  await fetch(
    "https://formula-1-standings.p.rapidapi.com/standings/drivers",
    config
  )
    .then((respuesta) => respuesta.json())
    .then((respuesta) => (results = respuesta.results))
    .catch((err) => console.error(err));

  let tabla = "";

  results.forEach(({ driver_name, position, points, team_name }) => {
    tabla += `
      <tr>
        <td>${position}</td>
        <td>${driver_name}</td>
        <td>${team_name}</td>
        <td>${points}</td>
      </tr>`;
  });

  const pilotos = document.getElementById("pilotos");
  pilotos.innerHTML = tabla;
}

async function constructores() {
  let results;

  await fetch(
    "https://formula-1-standings.p.rapidapi.com/standings/constructors",
    config
  )
    .then((respuesta) => respuesta.json())
    .then((respuesta) => (results = respuesta.results))
    .catch((err) => console.error(err));

  let tabla = "";

  results.forEach(({ team_name, position, points }) => {
    tabla += `
      <tr>
        <td>${position}</td>
        <td>${team_name}</td>
        <td>${points}</td>
      </tr>`;
  });

  const constructores = document.getElementById("constructores");
  constructores.innerHTML = tabla;
}

pilotos();
constructores();
