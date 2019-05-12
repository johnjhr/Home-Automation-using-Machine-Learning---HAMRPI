import RPi.GPIO as GPIO #import the GPIO library
import time

GPIO.setmode(GPIO.BOARD)
GPIO.setup(8, GPIO.IN, pull_up_down=GPIO.PUD_UP)

name = "Ryan"
print("Hello " + name)

while True:
    if GPIO.input(8):
       print("Door is open")
       time.sleep(2)
    if GPIO.input(8) == False:
       print("Door is closed")
       time.sleep(2)