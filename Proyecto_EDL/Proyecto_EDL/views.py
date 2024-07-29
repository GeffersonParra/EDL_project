from django.http import HttpResponse
from django.template import Template, Context 
from django.template.loader import get_template 
from django.shortcuts import render

def Login(request):
    return render(request, "Login.html")

def Home(request):
    return render(request, "Home.html")