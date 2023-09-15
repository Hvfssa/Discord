"use strict";

const son = document.getElementById("gasp");

const stopSounds = () => {
    son.pause();
    son.currentTime = 0;
};

const btn = document.createElement("button");
btn.innerText = "gasp";
btn.addEventListener("click", () => {
    stopSounds();
    son.play();
});
document.querySelector("body").appendChild(btn);



/*
const sounds = ["applause", "boo", "gasp", "tada", "victory", "wrong"];
const buttons = document.getElementById("buttons");

const stopSounds = () => {
  sounds.forEach((sound) => {
    const currentSound = document.getElementById(sound);
    currentSound.pause();
    currentSound.currentTime = 0;
  });
};

sounds.forEach((sound) => {
  const btn = document.createElement("button");
  btn.classList.add("btn");
  btn.innerText = sound;
  btn.addEventListener("click", () => {
    stopSounds();
    document.getElementById(sound).play();
  });
  buttons.appendChild(btn);
});
*/