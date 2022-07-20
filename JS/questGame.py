row = "===================================="
print(row)
print("Welcome to my quest game")
print(row)

secretNumber = 20

choose = int(input("Choose a number: "))
print("Your choose number is:", choose)
print(row)

if (secretNumber == choose):
    print("You are right!!")
elif(secretNumber > choose):
        print("You are wrong!! The secret number is larger that your choose")
else:
    print("You are wrong!! The secret number is lower that your choose")

print(row)

print("Fim do Jogo")
