# membuat generator password random

import string, secrets

chrs = string.ascii_letters
numbers = string.digits

choose = input("apa yang mau di ptint?: ")
leght = input("pilih password/pin lenght: ")

password_in_chrs = ''.join(secrets.choice(chrs) for i in range(int(leght)))
password_in_numbers = ''.join(secrets.choice(numbers) for i in range(int(leght)))


print(" ========== ========= password nyaa !!! ======== ==========")

if choose == "password":
	print(password_in_chrs)

if choose == "pin":
	print(password_in_numbers)	

