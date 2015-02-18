// JavaScript Document
					var randTech=new Array();

					randTech[0]="multishine.html"
					randTech[1]="di.html"
						
					techCnt = randTech.length;
					javascript: picTech();
					
					function picTech() {
						randomNum = Math.floor ((Math.random() * techCnt))
						techStored = randTech[randomNum]
					}