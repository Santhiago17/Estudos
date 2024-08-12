# Escreva um programa que leia um número inteiro positivo n e calcule a soma de todos os números inteiros de 1 até n usando um loop for.

n = int(input('Digite um número: '))

soma = 0

for i in range(1, n + 1):
    soma += i

print(f"A soma de 1 a {n} é {soma}.")
