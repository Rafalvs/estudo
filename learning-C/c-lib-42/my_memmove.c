void *ft_memmove(void *dst, const void *src, size_t len)
{
	unsigned int	i;

	if(!dst && !src)
		return (NULL);
	if(dst > src)
	{
		while(len > 0)
		{
			((char *)dst)[len - 1] = ((char *)src)[len - 1];
			len--;
		}
	}
	else
	{
		i = 0;
		while(i < len)
		{
			((char *)dst)[i] = ((char *)src)[i];
			i++;
		}
	}
	return(dst);
}