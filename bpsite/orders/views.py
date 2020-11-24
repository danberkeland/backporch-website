from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic import ListView
from .models import Item

def index(request):
	return HttpResponse("index")

def home(request):
	return render(request, 'bpsite/base.html', {})

def about(request):
	return render(request, 'bpsite/home.html', {})

class MenuView(ListView):
	template_name = "bpsite/menu.html"
	model = Item

	def get_queryset(self):
		return Item.objects.all()