## To execute the script, run the following command in your console.
php index.php

## Brief explanation
- Usage of Trait for the rules, that apply for the division and the league.
- Usage of Interface for the best practice, contract
- Usage of Psr4 for autoloading. (credit : https://www.php-fig.org/psr/psr-4/examples/) 
- For a pure OOP, printing message should be handled by other class.


> La simulation doit prendre en compte les informations suivantes :
> 
> La ligue est composé de 2 divisions (“East” et “West”).
> Chaque division possède 8 équipes (“A” à “H”).
> Chaque équipe possède 21 joueurs.
> Chaque joueur possède une côte de réussite allant de 0,15 à 1.
> 
> 
> Les séries éliminatoires se déroulent comme ceci:
> 
> 
> Les 8 équipes d’une division sont groupé par deux (ex: A+B, C+D, E+F, G+H).
> Chaque groupe jouent une série de matchs jusqu’à ce qu’une des deux équipes obtienne 4 victoires (4 de 7).
> Les gagnants de chaque groupe sont à nouveau groupé par deux (ex: A+C, E+G).
> Chaque groupe jouent une série de matchs jusqu’à ce qu’une des deux équipes obtienne 4 victoires (4 de 7).
> Les gagnants de chaque groupe s’affrontent ensuite dans une série 4 de 7 de final de division. (ex: C+E)
> Le même processus est réalisé pour la deuxième division.
> Les gagnants dans chacune des deux divisions s’affrontent ensuite dans une série 4 de 7 de grande finale (ex: EastE + WestC).
> 
> 
> Le simulateur devra effectuer les opérations suivantes :
> 
> 
> 
> Générer les divisions, équipes et joueurs de la ligue.
> Attribuer une côte de réussite de façon aléatoire à chaque joueur.
> Calculer la côte de réussite de l’équipe en effectuant la moyenne de la côte de chaque joueur de l’équipe.
> Simuler chaque match des séries :
> Utiliser la différence des côtes de réussite de chaque équipe pour établir les probabilités de victoire  
> Générer un nombre aléatoire entre 0 et 1 pour déterminer un gagnant en utilisant la probabilité de victoire de chaque équipe.
> Retourner le résultat de chaque série.
> 
> Exemple de résultat retourné : (le formatage peut différer, tant qu’il présente le résultat du nombre de victoire de chaque équipe pour une série ainsi que le gagnant)
> 
> 
> Division East:Round #0:Serie A vs B - Winner : A (4/3)Serie C vs D - Winner : C (4/2)Serie E vs F - Winner : F (4/1)Serie G vs H - Winner : H (4/3)Round #1:Serie A vs C - Winner : C (4/1)Serie F vs H - Winner : F (4/1)Round #2:Serie C vs F - Winner : C (4/1)--------------Division West:Round #0:Serie A vs B - Winner : B (4/3)Serie C vs D - Winner : D (4/2)Serie E vs F - Winner : F (4/1)Serie G vs H - Winner : G (4/2)Round #1:Serie B vs D - Winner : D (4/3)Serie F vs G - Winner : G (4/2)Round #2:Serie D vs G - Winner : D (4/0)--------------Final East C vs West D - Winner : East C (4/1)
> Critères d'évaluation:
> 
> Rapidité d'exécution, l'optimisation des algorithmes, propreté du code.