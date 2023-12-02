def linha():
    print('-' * 30)

def mensagem(msg):
    linha()
    print(msg)
    linha()


mensagem('Sistema de Alunos')
mensagem('Cadastro de Funcionarios')
mensagem('Erro do Sistema')

def contador(*num):
    tam = len(num)
    print(f'Recebi os valores {num} e são ao todo {tam} numeros')

contador(2,1,7)
contador(8,0)
contador(4,4,7,6,2)

def dobra(lst):
    pos = 0
    while pos < len(lst):
        lst[pos]*=2
        pos+=1

valores = [7,2,5,0,4]
dobra(valores)
print(valores)

def area(largura, comprimento):
    area = largura * comprimento
    print(f"A área do terreno {largura}x{comprimento} é {area} metros quadrados")

largura = int(input('Largura: '))
comprimento = int(input('Comprimento: '))
area(largura, comprimento)

def contadorCresente(inicio, fim, passo):
    print(f'{inicio}')
    while inicio <= fim:
        inicio += passo
        if inicio <= fim:
            print(f"{inicio}")

    linha()

def contadorDecresente(inicio, fim, passo):
    print(f'{inicio}')
    while inicio > fim:
        inicio -= passo
        if inicio != fim:
            print(f"{inicio}")
    
    linha()

def contadorMultiplicador(inicio, fim, passo):
    print(f'{inicio}')
    while inicio < fim:
        inicio *= passo
        if inicio != fim:
            print(f"{inicio}")

    linha()

contadorCresente(1,10,1)
contadorDecresente(10,0,2)
contadorMultiplicador(1,128,2)
