graf= {
	
	'pospol': ['banjar', 'royal'],
	'banjar': ['royal', 'cipete','cipondoh'],
	'cipete': ['alamsutera'],
	'cipondoh': ['royal', 'poris', 'pinang'],
	'royal': ['poris','banjar','cipondoh'],
	'pinang': ['cipondoh', 'greenlake'],
	'poris': ['greenlake', 'cipondoh', 'royal'],
	'greenlake': ['ciledug', 'poris', 'pinang'],
	'ciledug': ['graha', 'greenlake'],
	'graha': ['alamsutera'],
	'alamsutera': ['cipete', 'kantor']
}

def cari_rute(graf, awal, akhir, jalur=[]):
	jalur = jalur + [awal]
	if awal == akhir:
		return [jalur]
	if not awal in graf:
		return[]
	semua_jalur = []
	for titik in graf[awal]:
		if titik not in jalur:
			jalur_jalur = cari_rute(graf, titik, akhir, jalur)
			for jalur_baru in jalur_jalur:
				semua_jalur.append(jalur_baru)
	return semua_jalur
def counter(data):
	jalan = ""
	for y in range(0, len(data)):
		if y < len(data) - 1:
			jalan += data[y] + " > "
		else:
			jalan += data[y]
	return jalan

start = input("Mulai dari mana: ")
finish = input("Tujuan anda: ")

data_x = cari_rute(graf, start, finish)
print(f"jumlah jalan : {len(data_x)}")
min = data_x[0]
max = []
for x in data_x:
	if len(x) < len(min):
		min = x
	if len(x) > len(max):
		max = x

print(f"Perjalanan Tercepat: {counter(min)}")
print(f"Perjalanan Terlama : {counter(max)}")
print(f"Daftar Perjalanan yang bisa di lewati : ")

for x in range(0, len(data_x)):
	print (f"RUTE {x+1} : ")
	print(counter(data_x[x]))