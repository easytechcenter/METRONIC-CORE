<?php
// calcul siret
				function is_siret($siret)
                {
                    if (strlen($siret) != 14) return 1; // le SIRET doit contenir 14 caractères
                    if (!is_numeric($siret)) return 2; // le SIRET ne doit contenir que des chiffres

                    // on prend chaque chiffre un par un
                    // si son index (position dans la chaîne en commence à 0 au premier caractère) est pair
                    // on double sa valeur et si cette dernière est supérieure à 9, on lui retranche 9
                    // on ajoute cette valeur à la somme totale

                    for ($index = 0; $index < 14; $index ++)
                    {
                        $number = (int) $siret[$index];
                        if (($index % 2) == 0) { if (($number *= 2) > 9) $number -= 9; }
                        @$sum += $number;
                    }

                    // le numéro est valide si la somme des chiffres est multiple de 10
                    if (($sum % 10) != 0) return 3; else return 0;      
                }
$a = "ALERT";