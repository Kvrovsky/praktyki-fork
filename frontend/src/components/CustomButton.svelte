<script>
    export let shown = false
      
    export const show = () => { shown = !shown }
  </script>

<div on:click={show}>Child's button</div>

{#if shown}
  <slot/>
{/if}