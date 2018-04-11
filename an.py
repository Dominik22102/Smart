import RPi.GPIO as gpio
import time

gpio.setmode(gpio.BCM)
gpio.setup(22,gpio.OUT)
gpio.output(22,gpio.HIGH)