
# ------ Membuat History Command by mr kuncay -----

def counter_command():
    counter = input("baca lagi? (y/n)")
    if counter == "y":
        command()
    elif counter == "n":
        print("")
        print("Jadi gimana..?")
        tanya()

def counter_port_net():
    counter = input("baca lagi? (y/n)")
    if counter == "y":
        port_net()
    elif counter == "n":
        print("")
        print("Jadi gimana..?")
        tanya()        

def counter_vim():
    counter = input("baca lagi? (y/n)")
    if counter == "y":
        vim()
    elif counter == "n":
        print("")
        print("Jadi gimana..?")
        tanya()        

def counter_Cppbhs():
    counter = input("baca lagi? (y/n)")
    if counter == "y":
        Cppbhs()
    elif counter == "n":
        print("")
        print("Jadi gimana..?")
        tanya()        


def counter_C():
    counter = input("baca lagi? (y/n)")
    if counter == "y":
        C()
    elif counter == "n":
        print("")
        print("Jadi gimana..?")
        tanya()        



# 1. command

def command():
    print ("            ------------- COMMAND ------------------")
    print("                 by mrkuncay")
    print("")
    print("- menghapus caches di memory:  sync; echo 3 > /proc/sys/vm/drop_caches")
    print("- [mode root] update, upgrade, full-upgrade (apt-get)")
    print("         install, remove, reinstall (apt-get)")
    print("-  meliahat spek memory: free-h")
    print("")
    counter_command()

# 2. port network

def port_net():

    print("       ''''''''''''''' PORT NETWORK '''''''''''''''")
    print("                    by mrkuncay                    ")
    file = open("portnetwork", "r")
    for i in file:
        print(i)
    counter_port_net()

# 3. VIM command

def vim():
    print("------------- VIM command ---------------------")
    print("             by mrkuncay")
    vim = open("Vim", "r")
    for i in vim:
        print(i)        
    counter_vim()
        
# 4. C++ bahasa
def Cppbhs():
    print("------------- Bahasa C++ ---------------------")
    print("             by mrkuncay")
    C = open("Cppbhs", "r")
    for i in C:
        print(i)        
    counter_Cppbhs()

# 5. C bahsa
def C():
    print("------------- Bahasa C ---------------------")
    print("             by mrkuncay")
    S = open("C", "r")
    for i in S:
        print(i)        
    counter_C()

        




def main_menu():
# membuat daftar command
    print("--- SILAKAN DI PILIH ---")
    print("")
    print("1. command")
    print("")
    print("2. port netwok")
    print("")
    print("3. vim command") 
    print("")
    print("4. C++")  
    print("")
    print("5. bahasa C")
    print("exit Program")
# input pilihan
    print("")
    pilihan = input("Pilih menu: ")
# Pilihan menu  
    if pilihan == "1":
        command()

    elif pilihan == "2":
        port_net()
    elif pilihan == "3":
        vim()
    elif pilihan == "4":
        Cppbhs()
    elif pilihan == "5":
        C()    

    else:
         print("")
         print("--- Thankyou ---") 
         print("  Comeback later")
         exit()      


# login
def login_cuy():
    print('================')
    print('--- Welcome ---')
    print('')
    username = input ('username: ')
    password = input ('password: ')

    if username == 'mrkuncay' and password == 'adminpass10':
        print('--- Welcome mrkuncay ---\n\n')
        main_menu()
    else:
         print("")
         print('  Try again....  ')
         print("")
         login_cuy()

#tanya
def tanya():
    tanya = input(" kembali ke menu..? (y/n)")
    if tanya == "y":
        main_menu()
    elif tanya == "n":
          print("")
          print("/////////////////////////////////////////////////////")
          
          print("                   ")

          print("             --- Thankyou ---")
          print("              ----- :) ---------") 
          print("              Comeback later") 

#main program
if __name__ == "__main__":
    login_cuy()