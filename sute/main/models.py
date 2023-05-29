from django.db import models

class Sweater(models.Model):
    name = models.CharField('Название', max_length=30)
    descriptions = models.TextField('Описание')
    cost = models.FloatField()


class Jacket(models.Model):
    name = models.CharField('Название', max_length=30)
    descriptions = models.TextField('Описание')
    cost = models.FloatField()


class TShirt(models.Model):
    name = models.CharField('Название', max_length=30)
    descriptions = models.TextField('Описание')
    cost = models.FloatField()


class Pants(models.Model):
    name = models.CharField('Название', max_length=30)
    descriptions = models.TextField('Описание')
    cost = models.FloatField()


class Boots(models.Model):
    name = models.CharField('Название', max_length=30)
    descriptions = models.TextField('Описание')
    cost = models.FloatField()