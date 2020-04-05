'use strict';

function init()
{
//************************DECLARATIONS*****************************************
	var allH2 = document.querySelectorAll(".display-div");


//***********************FONCTIONS*****************************************
	function toggleClasses(event)
	{
		var selected = event.target.classList.contains("h2-selected");

		if(!selected)
		{
			for(let h2 of allH2)
			{
				h2.classList.toggle("h2-selected");
				h2.classList.toggle("underline");
			};

			document.querySelector(".cv-content-form").classList.toggle("hide");
			document.querySelector(".cv-content-exp").classList.toggle("hide");

		}
		
	};


//***************************APPELS***************************************
	for(let h2 of allH2)
	{
		h2.addEventListener("click", toggleClasses);
	};

};

document.addEventListener("DOMContentLoaded", init);