# Inisialisasi variabel sistem
suhu_ruangan = 25.0  # Suhu ruangan aktual dalam derajat Celsius
suhu_diinginkan = 22.0  # Suhu yang diinginkan dalam derajat Celsius

# Fungsi untuk mengatur suhu ruangan
def atur_suhu(suhu_actual, suhu_target):
    if suhu_actual < suhu_target:
        suhu_actual += 1
    elif suhu_actual > suhu_target:
        suhu_actual -= 1
    return suhu_actual

# Simulasi sistem
print("Sistem Pengaturan Suhu Ruangan")
print(f"Suhu Ruangan Awal: {suhu_ruangan}°C")

while suhu_ruangan != suhu_diinginkan:
    suhu_ruangan = atur_suhu(suhu_ruangan, suhu_diinginkan)
    print(f"Suhu Ruangan saat ini: {suhu_ruangan}°C")

print("Suhu Ruangan telah mencapai suhu yang diinginkan.")
