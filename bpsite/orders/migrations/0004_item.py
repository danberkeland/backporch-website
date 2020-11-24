# Generated by Django 3.1.3 on 2020-11-24 20:15

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('orders', '0003_auto_20201123_2104'),
    ]

    operations = [
        migrations.CreateModel(
            name='Item',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('item_name', models.CharField(max_length=50)),
                ('item_quantity', models.IntegerField(default=0)),
                ('item_prep', models.IntegerField(default=0)),
            ],
        ),
    ]