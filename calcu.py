#Operaciones basicas

valor1 = 5
valor2 = 5

suma = valor1 + valor2
resta = valor1 - valor2
multi = valor1 * valor2
division = valor1 / valor2
print("suma = ", suma)
print("resta = ", resta)
print("producto = ", multi)
print("division = ", division)

def fib(n):    
  a, b = 0, 1
  while a < n:
    print(a, end=' ')
    a, b = b, a+b
    print()
fib(1000)
