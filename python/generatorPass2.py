import random

data =  """abcefghijklmopqrstuvwxyz\
ABCDEFGHIJKLMOPQRSTUVWXYZ\
 "1234567890\
 !@&()?"""

password = ''.join(random.choices(data, k = 8))

print("passwordnya! :", password)