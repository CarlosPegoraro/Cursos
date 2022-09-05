import random

aluno1 = "Luan"
aluno2 = "Jose"
aluno3 = "Roberto"
aluno4 = "Maria"

numero = random.randrange(1,5)
print("O aluno escolhido foi: ")

if numero == 1:
    print(aluno1)
elif numero == 2:
    print(aluno2)
elif numero == 3:
    print(aluno3)
elif numero == 4:
    print(aluno4)
else:
    print("Esse aluno não existe!")