# Tutorial Python



# Entrada e Saída

print("Olá, mundo!")     # Exibe a mensagem "Olá, mundo!" no terminal como saida
print(5)                 # Exibe o número 5 no terminal como saida

'''

O uso de asterisco serve para fazer um comentário ou observação no código, enquanto
aspas/apóstrofos triplos servem para fazer comentários com mais de uma linha. Ambos
modos de comentário servem apenas para suporte ao programador e não serão lidos na
execução do código, além de não interferirem de qualquer forma.

'''

print("-------------------------------------------------------------")

# Variáveis

var1 = "Pedro"   # A variável com nome var1 recebe o valor Pedro como string
var2 = 5         # A variável com nome var2 recebe o valor 5 como int
var3 = 8.5       # A variável com nome var3 recebe o valor 8.5 como float
var4 = True      # A variável com nome var3 recebe o valor True como booleano

''' É possível dar uma variável como valor para outra variável caso as duas já
existam e tenham sido declaradas, além de poder alterar o valor delas mais tarde,
sobrepondo o valor anterior. Python possui tipagem dinâmica, o que quer dizer que
o tipo da variável é definido automaticamente durante a execução. '''

''' Os nomes das variáveis nesse exemplo são só demonstrativas mas é preciso que
o usuário escolha nomes sugestivos que facilitem que o entendimento da leitura do
código em qualquer projeto, ou o erro pode desencadear mais confusão para o desenvolvedor. '''

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









