<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">



<style>
*{
    font-family: "Inter", sans-serif;
    margin: 0px;
    padding: 0px;
}


.inter-tech{
  font-family: "Inter", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}



/*adamgiebl*/
  .container-body{
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    --color: rgba(114, 114, 114, 0.3);
    background-color: #0051ff;
    background-image: linear-gradient(0deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent),
        linear-gradient(90deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent);
    background-size: 55px 55px;
  }



  .tasks-body{
   margin-left: 18px;
   color: white;

}
/*Botão de deletar  */
.delete-button-card{
  background-color: #fa7b7b;
  border: none;
  border-radius: 5px;
  color: white;
  padding: 10px;
  cursor: pointer;
}

.delete-button-card:hover{
  background-color: #ff4c4c;

}

/*My*/
  .task-text{
    color: #fa7b7b;
  }

  .tesk-p-text{
    font-size: 13px;
  }


  .tasks-body h1 p{

  }


  .form-tasks{
      display: flex;

  
      
  }
.form-tasks input{

      margin-left: 10px;
      width: 20%;
      height: 2vh;
  }
  
.form-tasks label{

      margin-left: 10px;
    
  }
  


  .form-task-container{
    position: fixed; /*Ele ignora scroll: se você rolar a página, o elemento continua fixo na mesma posição na tela.*/             
    bottom: 0;
    left: 0;
    width: 100%; /* ocupa toda a largura */
    background-color: rgba(0,0,0,0.4);
    padding: 10px; 
  }





  
/* From Uiverse.io by abrahamcalsin */ 
  .card-client {
    display: flex;
    flex-direction: column;
    align-self: flex-end;



    width: 10vw;
    height: 5.5rem;
    margin-top: 10px;
    padding-top: 2px;
    padding-bottom: 8px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 10px;
    text-align: center;
    color: #fff;
    font-family: "Poppins", sans-serif;
    transition: all 0.3s ease;

  
    
  }

  .card-client:hover {
    transform: translateY(-2px);
    color: #fa7b7b;
  }

  .user-picture {
    overflow: hidden;
    object-fit: cover;
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 999px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
  }

  .user-picture svg {
    width: 1.5rem;
    fill: currentColor;
  }

  .name-client {
    margin: 0;
    margin-top: 10px;
    font-weight: 600;
    font-size: 16px;
  }

  .name-client span {
    display: block;
    font-weight: 200;
    font-size: 14px;
  }

  .social-media:before {
    content: " ";
    display: block;
    width: 100%;
    height: 2px;
    margin: 20px 0;
    background: #7cdacc;
  }

  .social-media a {
    position: relative;
    margin-right: 15px;
    text-decoration: none;
    color: inherit;
  }

  .social-media a:last-child {
    margin-right: 0;
  }

  .social-media a svg {
    width: 1.1rem;
    fill: currentColor;
  }

  /*-- Tooltip Social Media --*/
  .tooltip-social {
    background: #262626;
    display: block;
    position: absolute;
    bottom: 0;
    left: 50%;
    padding: 0.5rem 0.4rem;
    border-radius: 5px;
    font-size: 0.6rem;
    font-weight: 600;
    opacity: 0;
    pointer-events: none;
    transform: translate(-50%, -90%);
    transition: all 0.2s ease;
    z-index: 1;
  }

  .tooltip-social:after {
    content: " ";
    position: absolute;
    bottom: 1px;
    left: 50%;
    border: solid;
    border-width: 10px 10px 0 10px;
    border-color: transparent;
    transform: translate(-50%, 100%);
  }

  .social-media a .tooltip-social:after {
    border-top-color: #262626;
  }

  .social-media a:hover .tooltip-social {
    opacity: 1;
    transform: translate(-50%, -130%);
  }




/* From Uiverse.io by vamsidevendrakumar */ 
  .card {
    margin-top: 10px;
    width: 300px;
    height: 200px;
    perspective: 1000px;
  }

  .card-inner {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.999s;
  }

  .card:hover .card-inner {
    transform: rotateY(180deg);
  }

  .card-front,
  .card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }

  .card-front {
    background-color: #6A2C70;
    color: #fff;
    display: flex;
    align-items: center;
    border: 10px solid #6A2C70;
    border-radius: 10px;
    justify-content: center;
    font-size: 24px;
    transform: rotateY(0deg);
  }

  .card-back {
    background-color: #F08A5D;
    color: #fff;
    display: flex;
    align-items: center;
    border: 10px solid #F08A5D;
    border-radius: 10px;
    justify-content: center;
    font-size: 24px;
    transform: rotateY(180deg);
  }

.form-task-create{

}

/* From Uiverse.io by Voxybuns */ 
  .form-tasks button {
    /* Variables */
    --button_radius: 0.75em;
    --button_color: #e8e8e8;
    --button_outline_color: #000000;
    font-size: 17px;
    font-weight: bold;
    border: none;
    cursor: pointer;
    border-radius: var(--button_radius);
    background: var(--button_outline_color);
  }

  .button_top {
    display: block;
    box-sizing: border-box;
    border: 2px solid var(--button_outline_color);
    border-radius: var(--button_radius);
    padding: 0.75em 1.5em;
    background: var(--button_color);
    color: var(--button_outline_color);
    transform: translateY(-0.2em);
    transition: transform 0.1s ease;
  }

  button:hover .button_top {
    /* Pull the button upwards when hovered */
    transform: translateY(-0.33em);
  }

  button:active .button_top {
    /* Push the button downwards when pressed */
    transform: translateY(0);
  }




</style>