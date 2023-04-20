@echo off
set /p liczba=<"danee.txt"
echo %liczba%
pause
md art%liczba%
set wynik=%liczba%+1
echo %wynik%
pause
echo %liczba%>C:\xampp\htdocs\BROJEGD_MEGA\danee.txt
exit