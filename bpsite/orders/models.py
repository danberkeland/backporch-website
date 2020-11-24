from django.db import models

class User(models.Model):
	user_name = models.CharField(max_length=50)

	def __str__(self):
		return self.user_name

class Ingredients(models.Model):#maybe a silly name but temp for lack of better idea
	name = models.CharField(max_length=50, default="default ingredients")
	quantity = models.IntegerField(default=0)

class Order(models.Model):
	order_items = models.IntegerField(default=0) # just a placeholder field to not deal with list/foreign keys
	order_placed = models.DateTimeField('date created')
	user = models.ForeignKey(User, on_delete=models.CASCADE)
	completion_eta = models.IntegerField(default=0)

	def __str__(self):
		return self.order_items

class Item(models.Model):
	item_name = models.CharField(max_length=50)
	item_quantity = models.IntegerField(default=0)
	item_prep = models.IntegerField(default=0)

	def __str__(self):
		return self.item_name