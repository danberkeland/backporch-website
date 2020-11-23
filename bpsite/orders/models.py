from django.db import models

class User(models.Model):
	user_name = models.CharField(max_length=50)

	def __str__(self):
		return self.user_name
		
class Order(models.Model):
	order_items = models.IntegerField(default=0) # just a placeholder field to not deal with list/foreign keys
	order_placed = models.DateTimeField('date created')
	user = models.ForeignKey(User, on_delete=models.CASCADE)

	def __str__(self):
		return self.order_items

