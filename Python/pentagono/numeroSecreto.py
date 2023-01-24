import random

vida = 2
vencedor = False
numeroSecreto = int(random.randrange(1,11))
print("Tente acertar o número secreto, ele vai de 1 até 10")
tentativa = int(input("Digite o seu número escolhido aqui: "))
print("------------------------------------------------\n")
while(vida > 0 or vencedor == False):
    if tentativa == numeroSecreto:
        print("Parabens! você acertou!")
        print("------------------------------------------------\n")
        vencedor = True
        break
    elif tentativa > numeroSecreto:
        print("O número secreto é menor que a sua tentativa, tente novamente!")
        tentativa = int(input("Digite o seu número escolhido aqui: "))
        print("------------------------------------------------\n")
        vida -= 1
    elif tentativa < numeroSecreto:
        print("O número secreto é maior que a sua tentativa, tente novamente!")
        tentativa = int(input("Digite o seu número escolhido aqui: "))
        print("------------------------------------------------\n")
        vida -= 1
    else:
        print("Erro")

    if (vida < 0) and (vencedor == False):
        print("Você perdeu! tente novamente")
        print("O número secreto era: ", numeroSecreto)
        break

