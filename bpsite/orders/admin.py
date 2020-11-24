from django.contrib import admin

from .models import Order, User, Item

admin.site.register(Order)
admin.site.register(User)
admin.site.register(Item)
# Register your models here.
