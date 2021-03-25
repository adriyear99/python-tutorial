# Teste

''' Questão 1 '''

print("Uma linguagem de alto nível possui uma sintaxe voltada para entendimento humano")
print("de forma que o usuário possa entender com mais facilidade")
print("-------------------------------------------------------------------------------")



''' Questão 2 '''

var1 = 5
var2 = "8"
# res = var1 + var2
# print(res)
print("ERRO DE TIPAGEM")
print("-------------------------------------------------------------------------------")



''' Questão 3 '''

var1 = 10
var2 = 2
res = var1 % var2
print(res)
print("-------------------------------------------------------------------------------")



''' Questão 4 '''

var1 = 10
var2 = 2
var3 = 3

if (var1 % var3 == 1) and (var1 ** var2 == 100):
    print("As duas condições são verdadeiras")
elif (var1 % var3 == 1) and not(var1 ** var2 == 100):
    print("Apenas a primeira condição é verdadeira")
elif not(var1 % var3 == 1) and (var1 ** var2 == 100):
    print("Apenas a segunda condição é verdadeira")
else:
    print("As duas condições são falsas")

print("-------------------------------------------------------------------------------")



''' Questão 5 '''

var1 = 7
var2 = "7"

if var1 != var2:
    print("As variáveis são diferentes")
else:
    print("As variáveis são iguais")

print("-------------------------------------------------------------------------------")


''' Questão 6 '''

inicio = 4
final = 16
intervalo = 2

for x in range(inicio,final,intervalo):
    print(x)

print("-------------------------------------------------------------------------------")

''' Questão 7 '''

var = 5

# while var < 10:
    # print(var)

print("Infinito")

print("-------------------------------------------------------------------------------")

''' Questão 8 '''

lista = ["Eren","Reiner","Levi","Armin","Mikasa"]

indice = lista[3]

print(indice)

print("-------------------------------------------------------------------------------")

''' Questão 9 '''

def func(num1,num2,num3):
    calc = num1*num2 + num3
    return calc


var1 = 5
var2 = 8
var3 = 1
res = func(var1,var2,var3)
print("Resultado:",res)


print("-------------------------------------------------------------------------------")

''' Questão 10 '''

class Pessoa:
    def __init__(self,nome,sobrenome,idade,profissao,vivo):
        self.nome = nome
        self.sobrenome = sobrenome
        self.idade = idade
        self.profissao = profissao
        self.vivo = vivo

    def mensagem(self):
        print("Olá, meu nome é " + self.nome + " " + self.sobrenome)


eu = Pessoa("Sasha","Braus",15,"Soldado",True)

eu.idade += 4
del eu.profissao
eu.vivo = False

eu.mensagem()

print("-------------------------------------------------------------------------------")


