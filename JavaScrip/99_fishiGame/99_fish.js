document.addEventListener("DOMContentLoaded", () => {
    const player = document.getElementById("player");
    const fish = document.getElementById("fish");
  
    const gameContainer = document.getElementById("game-container");
    const containerWidth = gameContainer.offsetWidth;
    const containerHeight = gameContainer.offsetHeight;
  
    const movePlayer = (event) => {
      player.style.left = event.clientX - player.offsetWidth / 2 + "px";
      player.style.top = event.clientY - player.offsetHeight / 2 + "px";
    };
  
    const checkCollision = () => {
      const playerRect = player.getBoundingClientRect();
      const fishRect = fish.getBoundingClientRect();
  
      if (
        playerRect.x < fishRect.x + fishRect.width &&
        playerRect.x + playerRect.width > fishRect.x &&
        playerRect.y < fishRect.y + fishRect.height &&
        playerRect.y + playerRect.height > fishRect.y
      ) {
        fish.style.left = Math.random() * (containerWidth - fish.offsetWidth) + "px";
        fish.style.top = Math.random() * (containerHeight - fish.offsetHeight) + "px";
      }
    };
  
    const gameLoop = () => {
      checkCollision();
      requestAnimationFrame(gameLoop);
    };
  
    gameContainer.addEventListener("mousemove", movePlayer);
    fish.style.left = Math.random() * (containerWidth - fish.offsetWidth) + "px";
    fish.style.top = Math.random() * (containerHeight - fish.offsetHeight) + "px";
  
    gameLoop();
  });