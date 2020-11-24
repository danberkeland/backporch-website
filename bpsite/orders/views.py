from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic import TemplateView

def index(request):
	return HttpResponse("index")

def home(request):
	return render(request, 'bpsite/base.html', {})

def about(request):
	return render(request, 'bpsite/home.html', {})

class TestView(TemplateView):
	template_name = "about.html"