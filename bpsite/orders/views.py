from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic import ListView
from django.views.generic.detail import DetailView
from .models import Item
from django.shortcuts import render, redirect, get_object_or_404

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

class ItemDetailView(DetailView):
	template_name = "bpsite/item_detail.html"
	model = Item

	def get_context_data(self, **kwargs):
		context = super().get_context_data(**kwargs)
		context['prep_time'] = get_object_or_404(Item, pk=self.kwargs['pk'])
		return context