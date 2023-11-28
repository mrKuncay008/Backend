print ('-------  nama SPPBU  -----')
print ("")
print (" SPPBU 192.32.3.33 : SPPBU alam sutra")
print (" SPPBU 192.39.9.03 : SPPBU cipondoh")
print (" SPPBU 192.19.2.02 : SPPBU tebet")

 # alamat sppbu 
print("")
print (" **** *** ** alamat SPPBU *** **")
print ("")
print ("SPPBU alam sutra: jln boulvard alam surta, tangerang selatan")
print ("SPPBU cipondoh: jln kh asyim ashari, cipondoh, kota tangerang")
print ("SPPBU tebet: jln jendral bustomi, tebet, jakarta selatan")

 #jenis bbm
print("")
print (" *****  **** jenis bbm **** **")
print ("")
print ("Pertamax")
print ("Pertalite")

 #hrg bbm
print("")
print ("******* ** harga bbm / liter *******")
print ("")
print ("Pertalite: Rp 7.650/liter")
print ("Pertamax: Rp 12.500/liter")

# algoritma

#bensin = {
        
 #       "Pertamax": 12650,
 #       "Pertalite": 7500,
#}

print("-------------- struk bbm ---------------")
print('')

namasppbu = input('nama SPPBU: ')
jalan = input('nama jalan: ')
kota = input('nama kota: ')
shift = input ('masukan noshift: ')
notrans = input('masukan notransaksi: ')
waktu = input('masukan waktu: ')
#      ----------------------------------------
#
nopomp = input('masukan no pompa: ')
namaproduk = input('nama produk: ')
harga = input('masukan harga: ')
liter = input("masukan liter: ")
total = input('masukan total: ')
operator = input('opertor: ')
bayar = input ('bayar berapa: ')
#
#      -----------------------------------------
#      -----------------------------------------
#      ------------ TERIMAKASIH  ---------------

print("")
print("--------------- PERTAMINA ----------------")
print('__________________________________________')
print('__________________________________________')
print('')
print('           ' + namasppbu)
print('         ' + jalan)
print('            ' + kota)
print("")
print('Shift: ' + shift ,"\t No Trans: " + notrans)
print('Waktu: ' + waktu)
print('------------------------------------------')
print('Pompa       : ' + nopomp)
print('Nama Produk : ' + namaproduk)
print('Harga/Liter : ' + harga)
print('Volume      : (L)' + liter)
print('Total Harga :'  + total)
print('Operator    :'  + operator)
print('------------------------------------------')
print('CASH                              ' + bayar)
print('------------------------------------------')
print("------------ TERIMAKASIH  ---------------")