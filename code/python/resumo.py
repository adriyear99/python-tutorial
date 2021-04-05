# Tutorial Python



# Entrada e Saída

print("Olá, mundo!")     # Exibe a mensagem "Olá, mundo!" no terminal como saida
print(5)                 # Exibe o número 5 no terminal como saida

'''

O uso da cerquilha (#) serve para fazer um comentário ou observação no código,
enquanto aspas/apóstrofos triplos servem para fazer comentários com mais de uma
linha. Ambos modos de comentário servem apenas para suporte ao programador e não
serão lidos na execução do código, além de não interferirem de qualquer forma.

'''

print("-------------------------------------------------------------")



# Variáveis

var1 = "Pedro"   # A variável com nome var1 recebe o valor Pedro do tipo string
var2 = 5         # A variável com nome var2 recebe o valor 5 do tipo int
var3 = 8.5       # A variável com nome var3 recebe o valor 8.5 do tipo float
var4 = True      # A variável com nome var4 recebe o valor True do tipo booleano

print("Exemplo 1:",1+1)  # Retorna 2
print("Exemplo 2:",5-1)  # Retorna 4
print("Exemplo 3:",3*3)  # Retorna 9
print("Exemplo 4:",10/2) # Retorna 5
print("Exemplo 5:",9%2)  # Retorna 1 (resto da divisão)
print("Exemplo 6:",8**2) # Retorna 64 (exponenciação)

''' É possível dar uma variável como valor para outra variável caso as duas já
existam e tenham sido declaradas, além de poder alterar o valor delas mais tarde,
sobrepondo o valor anterior. Python possui tipagem dinâmica, o que quer dizer que
o tipo da variável é definido automaticamente durante a execução. '''

''' Os nomes das variáveis nesse exemplo são só demonstrativas mas é preciso que
o usuário escolha nomes sugestivos que facilitem que o entendimento da leitura do
código em qualquer projeto, ou o erro pode desencadear mais confusão para o desenvolvedor. '''

print("")
print(var1)
print(var2)
print(var3)
print(var4)
print("-------------------------------------------------------------")



# Condições

numero1 = int(input("Digite um número: "))
numero2 = 10

''' A função input permite que o usuário digite um valor que será armazenado pela variável
durante a execução do código, enquanto a função int converte o valor digitado para inteiro. '''

'''
Exemplo: Usuário armazenou o valor 8 na variável numero1
numero1 = 8
numero2 = 10
'''

# operadores possíveis: ( >, <, >=, <=, ==, != )

if numero1 > numero2:  # (maior que)
    print(numero1,"é maior que",numero2)
    # Essa mensagem não será mostrada porque a condição verdadeira não é atingida
elif numero1 == numero2:  # (igual)
    print(numero1,"é igual a",numero2)
    # Essa mensagem não será mostrada porque a condição verdadeira não é atingida
else:
    print(numero1,"é menor que",numero2)
    ''' O comando do else é mostrado apenas quando todas as condições anteriores não
    forem atingidas. Nesse caso, esse é o resultado verdadeiro a ser mostrado. '''


'''
Resultado final mostrado na tela: 8 é menor que 10
O código encontra a condição verdadeira no else e mostra o resultado.
Caso o resultado verdadeiro fosse encontrado antes, as condições após
essa não seriam consideradas e o código continuaria normalmente sem
chegar a ler as outras.
'''

print("-------------------------------------------------------------")



# Loops

for x in range(0,11,2):   # Mostra na tela os números pares de 0 a 10
    print(x,end=" ")
    # O parâmetro end serve apenas para mostrar os resultados sem pular linhas

print("\n")
''' \n é o comando para pular uma linha no código para que não se misture com a instrução
anterior, apesar de um pulo de linha já ser feito automaticamente em Python. '''

x = 0
while x <= 10:
    print(x,end=" ")
    x += 2

''' No exemplo, a variável x é incrementada em 2 a cada loop para que o mesmo pare quando o
valor de x chegar a ser maior que 10, tornando a condição de existência do while falsa. '''

''' Usar x += valor é equivalente a usar x = x + valor para incrementar a variável em um valor
específico, o que também vale para outros operadores (ex: x -= valor, x *= valor, x /= valor) '''

print("")
print("-------------------------------------------------------------")



# Listas e Dicionários

lista = ["Levi","Mikasa","Reiner","Jean","Pieck","Gabi"]

tamanho = len(lista)
print("Tamanho da lista:",tamanho)  # Retorna 6
print("")   # Pular uma linha

for x in range(len(lista)):   # len(lista) = 6
    print(lista[x])

print("")

for x in lista:   # Equivalente ao exemplo anterior
    print(x)

print("")

''' A variável x será incrementada a cada loop, mostrando na tela os valores
lista[0], lista[1], lista[2], lista[3], lista[4], lista[5] e lista[6], uma
de cada vez '''

''' O parâmetro inicial e de intervalo do loop for são opcionais. No exemplo,
usar o range(6) fará com que o bloco de código seja repetido 6 vezes, ocupando
os valores de 0 a 5. '''

dicionario = {"nome":"Eren", "sobrenome":"Yeager", "idade":15, "profissao":"soldado"}
dicionario["vivo"] = True
print(dicionario)

dicionario.pop("vivo")  # Deleta do dicionário o atributo "vivo"
del dicionario["profissao"]  # Deleta do dicionário o atributo "profissão"
del dicionario   # Deleta o dicionário inteiro

''' Após o último comando, tentar a instrução print(dicionario) resultaria
em erro porque o dicionário foi deletado e não existe mais. '''

print("-------------------------------------------------------------")



# Funções

def msg():
    print("Essa função exibe uma mensagem")
    # Nada vai acontecer até a função ser chamada


msg()   # Chamando a função
msg()
msg()

# É possível chamar a função quantas vezes for preciso


def soma(num1,num2):
    print("O resultado da soma é", num1+num2)


ex1 = 5
ex2 = 8

soma(ex1,ex2)   # Retorna 13

''' As variáveis num1 e num2 são só espaços vazios que podem ser
substituídos por qualquer variável usada no lugar delas nos parâmetros
para quando a função for chamada e o comando for executado. '''

def incremento(num):
    return num + 1

''' A palavra-chave return armazena o resultado da função em uma variável '''
ex3 = incremento(4)
print("O valor da variável é ",ex3)   # A variável vai armazenar o valor 5 (4+1)

print("-------------------------------------------------------------")



# Classes

class Pessoa:
    def __init__(self,nome,sobrenome,idade,profissao,vivo):  
        self.nome = nome
        self.sobrenome = sobrenome
        self.idade = idade
        self.profissao = profissao
        self.vivo = vivo

    def mensagem(self):  # O parâmetro self é obrigatório em cada método da classe
        print("Olá, meu nome é " + self.nome + " " + self.sobrenome)




eu = Pessoa("Eren","Yeager",15,"Soldado",True)
eu.mensagem()  # Mostra na tela a mensagem "Olá, meu nome é Eren Yeager"

''' A variável criada se tornou um objeto derivado da classe, que serve como
moldura para criar outros objetos com propriedades diferentes baseadas nos
mesmos atributos. A função __init__ é chamada quando cada objeto é criado e
o parâmetro self (ou qualquer outro nome) faz referência à instância da classe
e serve para acessar os atributos e métodos que fazem parte dessa classe.'''

eu.idade = 19    # É possível alterar o valor de qualquer atributo do objeto
del eu.profissao # Também é possível deletar qualquer atributo do objeto
        


