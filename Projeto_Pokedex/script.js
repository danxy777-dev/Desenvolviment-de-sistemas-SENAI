
// Lista de Pokémons
const pokemons = [
  6,    // Charizard
  25,   // Pikachu
  149,  // Dragonite
  448,  // Lucario
  384,  // Rayquaza
  445,  // Garchomp
  94,   // Gengar
  658,  // Greninja
  150,  // Mewtwo
  248   // Tyranitar
];

function randomPokemon(){
  return pokemons[Math.floor(Math.random() * pokemons.length)];
}

function updatePokemons(){

  const left = randomPokemon();
  const right = randomPokemon();

  document.getElementById("pokeLeft").src =
  `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${left}.png`;

  document.getElementById("pokeRight").src =
  `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${right}.png`;
}

// troca automática a cada 3 segundos
setInterval(updatePokemons, 3000);