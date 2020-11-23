from django.shortcuts import render
from django.http import HttpResponse

def index(request):
	return HttpResponse("test view for orders index")
# Create your views here.
