"""
5 - Elabore um algoritmo que leia dois números e mostre os seus valores
multiplicados por 10 se a soma dos valores originais for menor que 20.
"""

x = int(input("Digite um numero: "))
y = int(input("Digite outro numero: "))
if(x + y < 20):
    valor1 = x * 10
    valor2 = y * 10
    print("Resultado: ", valor1, valor2)