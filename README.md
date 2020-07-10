# Lycos-API-Crypt

##    Comment chiffrer mon texte ?

Vous devez faire une requête POST en indiquant les champs suivants :
_action_ : crypt
_plain_ : {texte à chiffrer}

Le script vous renverra ensuite un JSON avec un hash.
#### Exemple:
Requête POST : {"action":"crypt", "plain":"lycos"}
Réponse : {"hash":"24iwN\/ytBSYwSENJYbGMkcHGVw2VS7r+WFviFxRiX5fddGFp2fJLXiL1EnlYK6a0zN7IPRcbpOR4ZtNMTd5T0w=="}




##  	Comment comparer mon texte avec un hash ?

Vous devez faire une requête POST en indiquant les champs suivants :
_action_ : compare
_hash_ : hash
_plain_ : texte brut

Le script vous renverra ensuite un JSON indiquant si les 2 éléments sont liés ou pas.
#### Exemple:
Requête POST : {"action":"compare", "plain":"lycos", "hash":"24iwN\/ytBSYwSENJYbGMkcHGVw2VS7r+WFviFxRiX5fddGFp2fJLXiL1EnlYK6a0zN7IPRcbpOR4ZtNMTd5T0w=="}
Réponse : {"corresponds":"true"}

##### Autre exemple : 
Requête POST : {"action":"compare", "plain":"Lycos", "hash":"24iwN\/ytBSYwSENJYbGMkcHGVw2VS7r+WFviFxRiX5fddGFp2fJLXiL1EnlYK6a0zN7IPRcbpOR4ZtNMTd5T0w=="}
Réponse : {"corresponds":"false"}
